<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartResourceSnapshotJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ResourceSnapshotJobIdentifier
 */
class StartResourceSnapshotJobRequest extends Request
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
