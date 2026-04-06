<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ImageCriterionRequest>|null $ImageCriteria
 * @property bool|null $DryRun
 */
class ReplaceImageCriteriaInAllowedImagesSettingsRequest extends Request
{
    /**
     * @param array{
     *     ImageCriteria?: list<Shapes\ImageCriterionRequest>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
