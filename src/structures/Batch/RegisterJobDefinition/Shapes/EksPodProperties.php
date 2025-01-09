<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceAccountName
 * @property bool $hostNetwork
 * @property string $dnsPolicy
 * @property list<ImagePullSecret> $imagePullSecrets
 * @property list<EksContainer> $containers
 * @property list<EksContainer> $initContainers
 * @property list<EksVolume> $volumes
 * @property EksMetadata $metadata
 * @property bool $shareProcessNamespace
 */
class EksPodProperties extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string,
     *     hostNetwork?: bool,
     *     dnsPolicy?: string,
     *     imagePullSecrets?: list<ImagePullSecret>,
     *     containers?: list<EksContainer>,
     *     initContainers?: list<EksContainer>,
     *     volumes?: list<EksVolume>,
     *     metadata?: EksMetadata,
     *     shareProcessNamespace?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
