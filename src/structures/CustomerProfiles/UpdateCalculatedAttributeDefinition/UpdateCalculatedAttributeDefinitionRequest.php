<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $CalculatedAttributeName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property Shapes\Conditions|null $Conditions
 */
class UpdateCalculatedAttributeDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     CalculatedAttributeName: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     Conditions?: Shapes\Conditions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
