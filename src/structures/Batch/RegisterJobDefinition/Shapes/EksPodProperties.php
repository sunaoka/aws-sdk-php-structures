<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceAccountName
 * @property bool|null $hostNetwork
 * @property string|null $dnsPolicy
 * @property list<EksContainer>|null $containers
 * @property list<EksVolume>|null $volumes
 * @property EksMetadata|null $metadata
 */
class EksPodProperties extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string|null,
     *     hostNetwork?: bool|null,
     *     dnsPolicy?: string|null,
     *     containers?: list<EksContainer>|null,
     *     volumes?: list<EksVolume>|null,
     *     metadata?: EksMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
