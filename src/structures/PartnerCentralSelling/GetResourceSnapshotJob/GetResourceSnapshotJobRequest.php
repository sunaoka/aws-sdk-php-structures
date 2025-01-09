<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ResourceSnapshotJobIdentifier
 */
class GetResourceSnapshotJobRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ResourceSnapshotJobIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
