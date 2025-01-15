<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\GlueTable> $InputRecordTables
 * @property Shapes\TransformParameters $Parameters
 * @property string $Role
 * @property string|null $GlueVersion
 * @property double|null $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null $WorkerType
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property int|null $MaxRetries
 * @property array<string, string>|null $Tags
 * @property Shapes\TransformEncryption|null $TransformEncryption
 */
class CreateMLTransformRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     InputRecordTables: list<Shapes\GlueTable>,
     *     Parameters: Shapes\TransformParameters,
     *     Role: string,
     *     GlueVersion?: string|null,
     *     MaxCapacity?: double|null,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X'|null,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     MaxRetries?: int|null,
     *     Tags?: array<string, string>|null,
     *     TransformEncryption?: Shapes\TransformEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
