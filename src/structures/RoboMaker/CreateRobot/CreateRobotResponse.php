<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $greengrassGroupId
 * @property 'X86_64'|'ARM64'|'ARMHF'|null $architecture
 * @property array<string, string>|null $tags
 */
class CreateRobotResponse extends Response
{
}
