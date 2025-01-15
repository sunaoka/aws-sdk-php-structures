<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartSimulation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string|null $MaximumDuration
 * @property string $Name
 * @property string $RoleArn
 * @property Shapes\S3Location|null $SchemaS3Location
 * @property Shapes\S3Location|null $SnapshotS3Location
 * @property array<string, string>|null $Tags
 */
class StartSimulationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     MaximumDuration?: string|null,
     *     Name: string,
     *     RoleArn: string,
     *     SchemaS3Location?: Shapes\S3Location|null,
     *     SnapshotS3Location?: Shapes\S3Location|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
