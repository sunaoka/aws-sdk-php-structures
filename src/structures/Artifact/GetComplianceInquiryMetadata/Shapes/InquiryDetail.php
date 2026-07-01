<?php

namespace Sunaoka\Aws\Structures\Artifact\GetComplianceInquiryMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $id
 * @property 'PROCESSING'|'HUMAN_REVIEW'|'COMPLETED'|'FAILED' $status
 * @property 'Compliance inquiry processing is complete.'|'Malware was detected on the file. Provide a new file and try again.'|'Compliance inquiry processing is in-progress.'|'An internal error occurred while processing the inquiry. Try again at a later time.'|'Human review is in progress.'|'Compliance inquiry processing is complete. One or more queries encountered errors during processing.' $statusMessage
 * @property 'TEXT'|'FILE' $inputSource
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'AI_ONLY'|'FULL_SUPPORT'|null $supportMode
 */
class InquiryDetail extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     id: string,
     *     status: 'PROCESSING'|'HUMAN_REVIEW'|'COMPLETED'|'FAILED',
     *     statusMessage: 'Compliance inquiry processing is complete.'|'Malware was detected on the file. Provide a new file and try again.'|'Compliance inquiry processing is in-progress.'|'An internal error occurred while processing the inquiry. Try again at a later time.'|'Human review is in progress.'|'Compliance inquiry processing is complete. One or more queries encountered errors during processing.',
     *     inputSource: 'TEXT'|'FILE',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     supportMode?: 'AI_ONLY'|'FULL_SUPPORT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
