<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $PackagingGroupId
 * @property string $ResourceId
 * @property string $SourceArn
 * @property string $SourceRoleArn
 * @property array<string, string> $Tags
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     PackagingGroupId: string,
     *     ResourceId?: string,
     *     SourceArn: string,
     *     SourceRoleArn: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
