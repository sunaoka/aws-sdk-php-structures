<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssessmentParameters|null $AssessmentParameters
 * @property 'UPDATE_BROKER_TYPE' $AssessmentType
 * @property string $ClusterArn
 * @property array<string, string>|null $Tags
 */
class CreateAssessmentRequest extends Request
{
    /**
     * @param array{
     *     AssessmentParameters?: Shapes\AssessmentParameters|null,
     *     AssessmentType: 'UPDATE_BROKER_TYPE',
     *     ClusterArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
