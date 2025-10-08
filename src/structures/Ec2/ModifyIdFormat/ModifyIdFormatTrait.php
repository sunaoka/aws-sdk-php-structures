<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIdFormat;

trait ModifyIdFormatTrait
{
    /**
     * @param ModifyIdFormatRequest $args
     * @return void
     */
    public function modifyIdFormat(ModifyIdFormatRequest $args)
    {
        parent::modifyIdFormat($args->toArray());
    }
}
