<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 * @property string|null $dataSchemaVersion
 * @property DescriptorSource|null $source
 * @property SignatureAgentCardAdditionalData|null $additionalData
 */
class SignatureAgentCardDescriptor extends Shape
{
    /**
     * @param array{
     *     data?: string|null,
     *     dataSchemaVersion?: string|null,
     *     source?: DescriptorSource|null,
     *     additionalData?: SignatureAgentCardAdditionalData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
