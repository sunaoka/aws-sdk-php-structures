<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 * @property string $greengrassGroupId
 * @property array<string, string> $tags
 */
class CreateRobotRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     architecture: 'X86_64'|'ARM64'|'ARMHF',
     *     greengrassGroupId: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
