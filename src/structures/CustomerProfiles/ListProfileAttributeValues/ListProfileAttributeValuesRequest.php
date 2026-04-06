<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileAttributeValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $AttributeName
 */
class ListProfileAttributeValuesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
