<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlReference|null $Url
 * @property AttachmentReference|null $Attachment
 * @property EmailMessageReference|null $EmailMessage
 * @property EmailMessageReference|null $EmailMessageRedacted
 * @property EmailMessageReference|null $EmailMessagePlainText
 * @property EmailMessageReference|null $EmailMessagePlainTextRedacted
 * @property StringReference|null $String
 * @property NumberReference|null $Number
 * @property DateReference|null $Date
 * @property EmailReference|null $Email
 * @property ContactAnalysisReference|null $ContactAnalysis
 * @property VoicemailRecordingReference|null $VoicemailRecording
 * @property VoicemailRecordingReference|null $VoicemailRecordingRedacted
 * @property VoicemailAnalysisReference|null $VoicemailAnalysis
 * @property VoicemailAnalysisReference|null $VoicemailAnalysisRedacted
 */
class ReferenceSummary extends Shape
{
    /**
     * @param array{
     *     Url?: UrlReference|null,
     *     Attachment?: AttachmentReference|null,
     *     EmailMessage?: EmailMessageReference|null,
     *     EmailMessageRedacted?: EmailMessageReference|null,
     *     EmailMessagePlainText?: EmailMessageReference|null,
     *     EmailMessagePlainTextRedacted?: EmailMessageReference|null,
     *     String?: StringReference|null,
     *     Number?: NumberReference|null,
     *     Date?: DateReference|null,
     *     Email?: EmailReference|null,
     *     ContactAnalysis?: ContactAnalysisReference|null,
     *     VoicemailRecording?: VoicemailRecordingReference|null,
     *     VoicemailRecordingRedacted?: VoicemailRecordingReference|null,
     *     VoicemailAnalysis?: VoicemailAnalysisReference|null,
     *     VoicemailAnalysisRedacted?: VoicemailAnalysisReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
