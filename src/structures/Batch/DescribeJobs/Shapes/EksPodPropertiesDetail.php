<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceAccountName
 * @property bool|null $hostNetwork
 * @property string|null $dnsPolicy
 * @property list<ImagePullSecret>|null $imagePullSecrets
 * @property list<EksContainerDetail>|null $containers
 * @property list<EksContainerDetail>|null $initContainers
 * @property list<EksVolume>|null $volumes
 * @property string|null $podName
 * @property string|null $nodeName
 * @property EksMetadata|null $metadata
 * @property bool|null $shareProcessNamespace
 */
class EksPodPropertiesDetail extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string|null,
     *     hostNetwork?: bool|null,
     *     dnsPolicy?: string|null,
     *     imagePullSecrets?: list<ImagePullSecret>|null,
     *     containers?: list<EksContainerDetail>|null,
     *     initContainers?: list<EksContainerDetail>|null,
     *     volumes?: list<EksVolume>|null,
     *     podName?: string|null,
     *     nodeName?: string|null,
     *     metadata?: EksMetadata|null,
     *     shareProcessNamespace?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
