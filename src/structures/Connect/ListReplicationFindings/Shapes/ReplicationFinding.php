<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string|null $Region
 * @property string $ResourceType
 * @property string|null $Name
 * @property string|null $Operation
 * @property string|null $ReferenceCode
 * @property string|null $Message
 */
class ReplicationFinding extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Region?: string|null,
     *     ResourceType: string,
     *     Name?: string|null,
     *     Operation?: string|null,
     *     ReferenceCode?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
