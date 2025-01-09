<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataXML
 * @property string $roleArn
 * @property string $userIdAttribute
 * @property string $userGroupAttribute
 */
class SamlConfiguration extends Shape
{
    /**
     * @param array{
     *     metadataXML: string,
     *     roleArn: string,
     *     userIdAttribute: string,
     *     userGroupAttribute?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
