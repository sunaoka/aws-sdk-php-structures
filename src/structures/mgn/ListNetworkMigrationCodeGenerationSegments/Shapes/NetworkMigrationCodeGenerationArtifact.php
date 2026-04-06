<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerationSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $artifactID
 * @property 'CDK_TYPESCRIPT'|'CLOUDFORMATION_TEMPLATE'|'CDKTF_TYPESCRIPT'|'TERRAFORM_CONFIGURATION'|'CDK_L2_TYPESCRIPT'|null $artifactType
 * @property 'APPLICATION'|'NESTED_STACK'|'STACK'|null $artifactSubType
 * @property string|null $logicalID
 * @property S3Configuration|null $outputS3Configuration
 * @property Checksum|null $checksum
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class NetworkMigrationCodeGenerationArtifact extends Shape
{
    /**
     * @param array{
     *     artifactID?: string|null,
     *     artifactType?: 'CDK_TYPESCRIPT'|'CLOUDFORMATION_TEMPLATE'|'CDKTF_TYPESCRIPT'|'TERRAFORM_CONFIGURATION'|'CDK_L2_TYPESCRIPT'|null,
     *     artifactSubType?: 'APPLICATION'|'NESTED_STACK'|'STACK'|null,
     *     logicalID?: string|null,
     *     outputS3Configuration?: S3Configuration|null,
     *     checksum?: Checksum|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
