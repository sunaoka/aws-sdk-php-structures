<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateReviewTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property string $Description
 * @property list<string> $Lenses
 * @property string $Notes
 * @property array<string, string> $Tags
 * @property string $ClientRequestToken
 */
class CreateReviewTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     Description: string,
     *     Lenses: list<string>,
     *     Notes?: string,
     *     Tags?: array<string, string>,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
