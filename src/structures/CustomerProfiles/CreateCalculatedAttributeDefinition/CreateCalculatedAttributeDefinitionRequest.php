<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\AttributeDetails $AttributeDetails
 * @property Shapes\Conditions $Conditions
 * @property Shapes\Filter $Filter
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE' $Statistic
 * @property array<string, string> $Tags
 */
class CreateCalculatedAttributeDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     CalculatedAttributeName: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     AttributeDetails: Shapes\AttributeDetails,
     *     Conditions?: Shapes\Conditions,
     *     Filter?: Shapes\Filter,
     *     Statistic: 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
