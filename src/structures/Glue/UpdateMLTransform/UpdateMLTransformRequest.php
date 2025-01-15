<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\TransformParameters|null $Parameters
 * @property string|null $Role
 * @property string|null $GlueVersion
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property int|null $MaxRetries
 */
class UpdateMLTransformRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Parameters?: Shapes\TransformParameters|null,
     *     Role?: string|null,
     *     GlueVersion?: string|null,
     *     MaxCapacity?: double|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxRetries?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
