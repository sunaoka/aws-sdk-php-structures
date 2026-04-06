<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\AttributeDetails $AttributeDetails
 * @property Shapes\Conditions|null $Conditions
 * @property Shapes\Filter|null $Filter
 * @property 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE' $Statistic
 * @property array<string, string>|null $Tags
 */
class CreateCalculatedAttributeDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     CalculatedAttributeName: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     AttributeDetails: Shapes\AttributeDetails,
     *     Conditions?: Shapes\Conditions|null,
     *     Filter?: Shapes\Filter|null,
     *     Statistic: 'FIRST_OCCURRENCE'|'LAST_OCCURRENCE'|'COUNT'|'SUM'|'MINIMUM'|'MAXIMUM'|'AVERAGE'|'MAX_OCCURRENCE',
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
