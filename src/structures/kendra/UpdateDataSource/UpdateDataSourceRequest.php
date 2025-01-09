<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $IndexId
 * @property Shapes\DataSourceConfiguration $Configuration
 * @property Shapes\DataSourceVpcConfiguration $VpcConfiguration
 * @property string $Description
 * @property string $Schedule
 * @property string $RoleArn
 * @property string $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration $CustomDocumentEnrichmentConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     IndexId: string,
     *     Configuration?: Shapes\DataSourceConfiguration,
     *     VpcConfiguration?: Shapes\DataSourceVpcConfiguration,
     *     Description?: string,
     *     Schedule?: string,
     *     RoleArn?: string,
     *     LanguageCode?: string,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
