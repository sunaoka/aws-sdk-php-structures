<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\PackageImportJobInputConfig $InputConfig
 * @property list<Shapes\JobResourceTags> $JobTags
 * @property 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION' $JobType
 * @property Shapes\PackageImportJobOutputConfig $OutputConfig
 */
class CreatePackageImportJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     InputConfig: Shapes\PackageImportJobInputConfig,
     *     JobTags?: list<Shapes\JobResourceTags>,
     *     JobType: 'NODE_PACKAGE_VERSION'|'MARKETPLACE_NODE_PACKAGE_VERSION',
     *     OutputConfig: Shapes\PackageImportJobOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
