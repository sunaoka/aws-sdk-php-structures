<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $greengrassGroupId
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 * @property array<string, string> $tags
 */
class CreateRobotResponse extends Response
{
}
