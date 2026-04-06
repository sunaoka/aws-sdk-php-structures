<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StopResourceSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ResourceSnapshotJobIdentifier
 */
class StopResourceSnapshotJobRequest extends Request
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
