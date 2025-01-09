<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartSimulation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property string $MaximumDuration
 * @property string $Name
 * @property string $RoleArn
 * @property Shapes\S3Location $SchemaS3Location
 * @property Shapes\S3Location $SnapshotS3Location
 * @property array<string, string> $Tags
 */
class StartSimulationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     MaximumDuration?: string,
     *     Name: string,
     *     RoleArn: string,
     *     SchemaS3Location?: Shapes\S3Location,
     *     SnapshotS3Location?: Shapes\S3Location,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
