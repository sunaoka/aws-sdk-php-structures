<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImageCriterionRequest> $ImageCriteria
 * @property bool $DryRun
 */
class ReplaceImageCriteriaInAllowedImagesSettingsRequest extends Request
{
    /**
     * @param array{
     *     ImageCriteria?: list<Shapes\ImageCriterionRequest>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
