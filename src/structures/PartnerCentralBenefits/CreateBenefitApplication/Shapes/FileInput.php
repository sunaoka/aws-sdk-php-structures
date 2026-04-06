<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\CreateBenefitApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileURI
 * @property string|null $BusinessUseCase
 */
class FileInput extends Shape
{
    /**
     * @param array{
     *     FileURI: string,
     *     BusinessUseCase?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
