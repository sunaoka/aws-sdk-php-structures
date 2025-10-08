<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetSnapshotAttribute;

trait ResetSnapshotAttributeTrait
{
    /**
     * @param ResetSnapshotAttributeRequest $args
     * @return void
     */
    public function resetSnapshotAttribute(ResetSnapshotAttributeRequest $args)
    {
        parent::resetSnapshotAttribute($args->toArray());
    }
}
