<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObjectTypeName
 * @property string $Object
 * @property string $DomainName
 */
class PutProfileObjectRequest extends Request
{
    /**
     * @param array{
     *     ObjectTypeName: string,
     *     Object: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
