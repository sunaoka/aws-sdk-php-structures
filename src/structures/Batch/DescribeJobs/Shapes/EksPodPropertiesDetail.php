<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceAccountName
 * @property bool $hostNetwork
 * @property string $dnsPolicy
 * @property list<ImagePullSecret> $imagePullSecrets
 * @property list<EksContainerDetail> $containers
 * @property list<EksContainerDetail> $initContainers
 * @property list<EksVolume> $volumes
 * @property string $podName
 * @property string $nodeName
 * @property EksMetadata $metadata
 * @property bool $shareProcessNamespace
 */
class EksPodPropertiesDetail extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string,
     *     hostNetwork?: bool,
     *     dnsPolicy?: string,
     *     imagePullSecrets?: list<ImagePullSecret>,
     *     containers?: list<EksContainerDetail>,
     *     initContainers?: list<EksContainerDetail>,
     *     volumes?: list<EksVolume>,
     *     podName?: string,
     *     nodeName?: string,
     *     metadata?: EksMetadata,
     *     shareProcessNamespace?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
