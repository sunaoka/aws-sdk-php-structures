<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $PackagingGroupId
 * @property string|null $ResourceId
 * @property string $SourceArn
 * @property string $SourceRoleArn
 * @property array<string, string>|null $Tags
 */
class CreateAssetRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     PackagingGroupId: string,
     *     ResourceId?: string|null,
     *     SourceArn: string,
     *     SourceRoleArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
