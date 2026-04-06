<?php

namespace Sunaoka\Aws\Structures\S3Tables\RenameTable;

trait RenameTableTrait
{
    /**
     * @param RenameTableRequest $args
     * @return void
     */
    public function renameTable(RenameTableRequest $args)
    {
        parent::renameTable($args->toArray());
    }
}
