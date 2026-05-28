<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchPutProfileObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property list<Shapes\BatchPutProfileObjectRequestItem> $Items
 */
class BatchPutProfileObjectRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     Items: list<Shapes\BatchPutProfileObjectRequestItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
