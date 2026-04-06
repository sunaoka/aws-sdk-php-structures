<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceAccountName
 * @property bool|null $hostNetwork
 * @property string|null $dnsPolicy
 * @property list<ImagePullSecret>|null $imagePullSecrets
 * @property list<EksContainer>|null $containers
 * @property list<EksContainer>|null $initContainers
 * @property list<EksVolume>|null $volumes
 * @property EksMetadata|null $metadata
 * @property bool|null $shareProcessNamespace
 */
class EksPodProperties extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string|null,
     *     hostNetwork?: bool|null,
     *     dnsPolicy?: string|null,
     *     imagePullSecrets?: list<ImagePullSecret>|null,
     *     containers?: list<EksContainer>|null,
     *     initContainers?: list<EksContainer>|null,
     *     volumes?: list<EksVolume>|null,
     *     metadata?: EksMetadata|null,
     *     shareProcessNamespace?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
