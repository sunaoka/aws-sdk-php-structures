<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $machineImageId
 * @property string|null $name
 * @property string|null $ownerAccountId
 * @property string|null $platform
 * @property 'X86_64'|'ARM64'|null $architecture
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $state
 * @property bool|null $isPublic
 * @property string|null $rootDeviceType
 * @property string|null $virtualizationType
 * @property string|null $sourceResourceId
 */
class MachineImageDetails extends Shape
{
    /**
     * @param array{
     *     machineImageId: string,
     *     name?: string|null,
     *     ownerAccountId?: string|null,
     *     platform?: string|null,
     *     architecture?: 'X86_64'|'ARM64'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     state?: string|null,
     *     isPublic?: bool|null,
     *     rootDeviceType?: string|null,
     *     virtualizationType?: string|null,
     *     sourceResourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
