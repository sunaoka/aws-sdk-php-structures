<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\GlueTable> $InputRecordTables
 * @property Shapes\TransformParameters $Parameters
 * @property string $Role
 * @property string $GlueVersion
 * @property double $MaxCapacity
 * @property 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X' $WorkerType
 * @property int $NumberOfWorkers
 * @property int $Timeout
 * @property int $MaxRetries
 * @property array<string, string> $Tags
 * @property Shapes\TransformEncryption $TransformEncryption
 */
class CreateMLTransformRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     InputRecordTables: list<Shapes\GlueTable>,
     *     Parameters: Shapes\TransformParameters,
     *     Role: string,
     *     GlueVersion?: string,
     *     MaxCapacity?: double,
     *     WorkerType?: 'Standard'|'G.1X'|'G.2X'|'G.025X'|'G.4X'|'G.8X'|'Z.2X',
     *     NumberOfWorkers?: int,
     *     Timeout?: int,
     *     MaxRetries?: int,
     *     Tags?: array<string, string>,
     *     TransformEncryption?: Shapes\TransformEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
