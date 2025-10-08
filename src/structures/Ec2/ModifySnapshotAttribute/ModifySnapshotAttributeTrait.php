<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotAttribute;

trait ModifySnapshotAttributeTrait
{
    /**
     * @param ModifySnapshotAttributeRequest $args
     * @return void
     */
    public function modifySnapshotAttribute(ModifySnapshotAttributeRequest $args)
    {
        parent::modifySnapshotAttribute($args->toArray());
    }
}
