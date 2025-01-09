<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $CalculatedAttributeName
 * @property string $DisplayName
 * @property string $Description
 * @property Shapes\Conditions $Conditions
 */
class UpdateCalculatedAttributeDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     CalculatedAttributeName: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     Conditions?: Shapes\Conditions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
