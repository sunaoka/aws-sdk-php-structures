<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string $IndexId
 * @property Shapes\DataSourceConfiguration|null $Configuration
 * @property Shapes\DataSourceVpcConfiguration|null $VpcConfiguration
 * @property string|null $Description
 * @property string|null $Schedule
 * @property string|null $RoleArn
 * @property string|null $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration|null $CustomDocumentEnrichmentConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     IndexId: string,
     *     Configuration?: Shapes\DataSourceConfiguration|null,
     *     VpcConfiguration?: Shapes\DataSourceVpcConfiguration|null,
     *     Description?: string|null,
     *     Schedule?: string|null,
     *     RoleArn?: string|null,
     *     LanguageCode?: string|null,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
