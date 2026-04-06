<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceAccountName
 * @property bool|null $hostNetwork
 * @property string|null $dnsPolicy
 * @property list<EksContainerDetail>|null $containers
 * @property list<EksVolume>|null $volumes
 * @property string|null $podName
 * @property string|null $nodeName
 * @property EksMetadata|null $metadata
 */
class EksPodPropertiesDetail extends Shape
{
    /**
     * @param array{
     *     serviceAccountName?: string|null,
     *     hostNetwork?: bool|null,
     *     dnsPolicy?: string|null,
     *     containers?: list<EksContainerDetail>|null,
     *     volumes?: list<EksVolume>|null,
     *     podName?: string|null,
     *     nodeName?: string|null,
     *     metadata?: EksMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
