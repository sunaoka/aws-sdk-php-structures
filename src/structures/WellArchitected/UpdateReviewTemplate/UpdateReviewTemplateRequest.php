<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string $TemplateName
 * @property string $Description
 * @property string $Notes
 * @property list<string> $LensesToAssociate
 * @property list<string> $LensesToDisassociate
 */
class UpdateReviewTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     TemplateName?: string,
     *     Description?: string,
     *     Notes?: string,
     *     LensesToAssociate?: list<string>,
     *     LensesToDisassociate?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
