<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerUrl
 * @property string $SecretArn
 * @property 'CLOUD'|'SERVER' $Version
 * @property ConfluenceSpaceConfiguration|null $SpaceConfiguration
 * @property ConfluencePageConfiguration|null $PageConfiguration
 * @property ConfluenceBlogConfiguration|null $BlogConfiguration
 * @property ConfluenceAttachmentConfiguration|null $AttachmentConfiguration
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property ProxyConfiguration|null $ProxyConfiguration
 * @property 'HTTP_BASIC'|'PAT'|null $AuthenticationType
 */
class ConfluenceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerUrl: string,
     *     SecretArn: string,
     *     Version: 'CLOUD'|'SERVER',
     *     SpaceConfiguration?: ConfluenceSpaceConfiguration|null,
     *     PageConfiguration?: ConfluencePageConfiguration|null,
     *     BlogConfiguration?: ConfluenceBlogConfiguration|null,
     *     AttachmentConfiguration?: ConfluenceAttachmentConfiguration|null,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     ProxyConfiguration?: ProxyConfiguration|null,
     *     AuthenticationType?: 'HTTP_BASIC'|'PAT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
