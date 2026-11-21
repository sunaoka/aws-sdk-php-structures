<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contributor
 * @property list<ProvenanceLink>|null $provenance
 */
class TrustManifest extends Shape
{
    /**
     * @param array{
     *     contributor: string,
     *     provenance?: list<ProvenanceLink>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
