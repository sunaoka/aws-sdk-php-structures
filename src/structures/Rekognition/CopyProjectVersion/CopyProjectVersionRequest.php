<?php

namespace Sunaoka\Aws\Structures\Rekognition\CopyProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceProjectArn
 * @property string $SourceProjectVersionArn
 * @property string $DestinationProjectArn
 * @property string $VersionName
 * @property Shapes\OutputConfig $OutputConfig
 * @property array<string, string>|null $Tags
 * @property string|null $KmsKeyId
 */
class CopyProjectVersionRequest extends Request
{
    /**
     * @param array{
     *     SourceProjectArn: string,
     *     SourceProjectVersionArn: string,
     *     DestinationProjectArn: string,
     *     VersionName: string,
     *     OutputConfig: Shapes\OutputConfig,
     *     Tags?: array<string, string>|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
