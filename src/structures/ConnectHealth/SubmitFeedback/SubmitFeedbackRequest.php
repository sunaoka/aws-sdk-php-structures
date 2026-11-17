<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\SubmitFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $artifactSourceId
 * @property string|null $subscriptionId
 * @property 'CLINICAL_DOC'|'MEDICAL_CODES' $artifactType
 * @property string $signedArtifactS3Uri
 * @property string|null $generatedArtifactS3Uri
 * @property string|null $comments
 * @property string|null $clientToken
 */
class SubmitFeedbackRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     artifactSourceId: string,
     *     subscriptionId?: string|null,
     *     artifactType: 'CLINICAL_DOC'|'MEDICAL_CODES',
     *     signedArtifactS3Uri: string,
     *     generatedArtifactS3Uri?: string|null,
     *     comments?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
