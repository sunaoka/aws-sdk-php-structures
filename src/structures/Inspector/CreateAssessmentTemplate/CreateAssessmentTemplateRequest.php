<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetArn
 * @property string $assessmentTemplateName
 * @property int $durationInSeconds
 * @property list<string> $rulesPackageArns
 * @property list<Shapes\Attribute> $userAttributesForFindings
 */
class CreateAssessmentTemplateRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetArn: string,
     *     assessmentTemplateName: string,
     *     durationInSeconds: int,
     *     rulesPackageArns: list<string>,
     *     userAttributesForFindings?: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
