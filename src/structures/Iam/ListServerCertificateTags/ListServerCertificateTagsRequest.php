<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListServerCertificateTagsRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
