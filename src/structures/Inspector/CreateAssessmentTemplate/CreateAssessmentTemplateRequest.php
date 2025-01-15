<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetArn
 * @property string $assessmentTemplateName
 * @property int<180, 86400> $durationInSeconds
 * @property list<string> $rulesPackageArns
 * @property list<Shapes\Attribute>|null $userAttributesForFindings
 */
class CreateAssessmentTemplateRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetArn: string,
     *     assessmentTemplateName: string,
     *     durationInSeconds: int<180, 86400>,
     *     rulesPackageArns: list<string>,
     *     userAttributesForFindings?: list<Shapes\Attribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
