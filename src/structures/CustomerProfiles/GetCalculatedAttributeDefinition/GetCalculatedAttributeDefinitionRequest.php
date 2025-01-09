<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $CalculatedAttributeName
 */
class GetCalculatedAttributeDefinitionRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     CalculatedAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
