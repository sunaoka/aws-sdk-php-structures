<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerCertificateName
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListServerCertificateTagsRequest extends Request
{
    /**
     * @param array{
     *     ServerCertificateName: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
