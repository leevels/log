<?php

declare(strict_types=1);

/*
 * This file is part of the ************************ package.
 * _____________                           _______________
 *  ______/     \__  _____  ____  ______  / /_  _________
 *   ____/ __   / / / / _ \/ __`\/ / __ \/ __ \/ __ \___
 *    __/ / /  / /_/ /  __/ /  \  / /_/ / / / / /_/ /__
 *      \_\ \_/\____/\___/_/   / / .___/_/ /_/ .___/
 *         \_\                /_/_/         /_/
 *
 * The PHP Framework For Code Poem As Free As Wind. <Query Yet Simple>
 * (c) 2010-2020 http://queryphp.com All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Leevel\Log\Helper;

use Leevel\Di\Container;
use Leevel\Log\ILog;

/**
 * 记录日志.
 */
function record(string $message, array $context = [], string $level = ILog::INFO): void
{
    /** @var \Leevel\Log\Manager $log */
    $log = Container::singletons()->make('logs');
    $log->log($level, $message, $context);
}

class record
{
}