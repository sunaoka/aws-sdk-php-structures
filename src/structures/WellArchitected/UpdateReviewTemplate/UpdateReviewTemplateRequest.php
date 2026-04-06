<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateArn
 * @property string|null $TemplateName
 * @property string|null $Description
 * @property string|null $Notes
 * @property list<string>|null $LensesToAssociate
 * @property list<string>|null $LensesToDisassociate
 */
class UpdateReviewTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateArn: string,
     *     TemplateName?: string|null,
     *     Description?: string|null,
     *     Notes?: string|null,
     *     LensesToAssociate?: list<string>|null,
     *     LensesToDisassociate?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
