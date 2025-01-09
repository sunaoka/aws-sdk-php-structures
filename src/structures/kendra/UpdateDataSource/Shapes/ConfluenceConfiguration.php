<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerUrl
 * @property string $SecretArn
 * @property 'CLOUD'|'SERVER' $Version
 * @property ConfluenceSpaceConfiguration $SpaceConfiguration
 * @property ConfluencePageConfiguration $PageConfiguration
 * @property ConfluenceBlogConfiguration $BlogConfiguration
 * @property ConfluenceAttachmentConfiguration $AttachmentConfiguration
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property ProxyConfiguration $ProxyConfiguration
 * @property 'HTTP_BASIC'|'PAT' $AuthenticationType
 */
class ConfluenceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerUrl: string,
     *     SecretArn: string,
     *     Version: 'CLOUD'|'SERVER',
     *     SpaceConfiguration?: ConfluenceSpaceConfiguration,
     *     PageConfiguration?: ConfluencePageConfiguration,
     *     BlogConfiguration?: ConfluenceBlogConfiguration,
     *     AttachmentConfiguration?: ConfluenceAttachmentConfiguration,
     *     VpcConfiguration?: DataSourceVpcConfiguration,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     ProxyConfiguration?: ProxyConfiguration,
     *     AuthenticationType?: 'HTTP_BASIC'|'PAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
