<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\UpdateKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KvsARN
 * @property string $IfMatch
 * @property list<Shapes\PutKeyRequestListItem> $Puts
 * @property list<Shapes\DeleteKeyRequestListItem> $Deletes
 */
class UpdateKeysRequest extends Request
{
    /**
     * @param array{
     *     KvsARN: string,
     *     IfMatch: string,
     *     Puts?: list<Shapes\PutKeyRequestListItem>,
     *     Deletes?: list<Shapes\DeleteKeyRequestListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
