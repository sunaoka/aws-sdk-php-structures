<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeForProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ProfileId
 * @property string $CalculatedAttributeName
 */
class GetCalculatedAttributeForProfileRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ProfileId: string,
     *     CalculatedAttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
