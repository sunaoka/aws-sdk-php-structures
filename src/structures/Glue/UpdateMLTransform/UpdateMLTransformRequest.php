<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $Name
 * @property string $Description
 * @property Shapes\TransformParameters $Parameters
 * @property string $Role
 * @property string $GlueVersion
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property int<1, max> $Timeout
 * @property int $MaxRetries
 */
class UpdateMLTransformRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     Name?: string,
     *     Description?: string,
     *     Parameters?: Shapes\TransformParameters,
     *     Role?: string,
     *     GlueVersion?: string,
     *     MaxCapacity?: double,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     Timeout?: int<1, max>,
     *     MaxRetries?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
